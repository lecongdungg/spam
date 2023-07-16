import requests
import json
import os
import subprocess

bot_token = '6001311695:AAE00LXg-UXxJYPGk9WMp76GALs2WProHwY'
bot_api_url = f'https://api.telegram.org/bot{bot_token}/'

processes = []

admin = 5078663873
buy = [5078663873, 6262131787, 6104974812]


def send_message(chat_id, text):
  data = {'chat_id': chat_id, 'text': text}
  response = requests.post(bot_api_url + 'sendMessage', json=data)
  if response.status_code == 200:
    print('Message sent successfully.')
  else:
    print('Failed to send message.')


def lqm_sms(message):
  user_id = message['from']['id']
  username = message['from'].get('username', "người dùng")

  if len(message['text'].split()) < 3:
    send_message(user_id, '🚀VUI LÒNG NHẬP SỐ ĐIỆN THOẠI VÀ THỜI GIAN DELAY🚀 ')
    return

  phone_number = message['text'].split()[1]
  if not phone_number.isnumeric() or len(phone_number) != 10:
    send_message(user_id, '🚀SỐ ĐIỆN THOẠI KHÔNG HỢP LỆ !🚀')
    return

  if phone_number in [
      '113', '911', '114', '115', '0387069080', '0344556382', '0819876977'
  ]:
    send_message(
      user_id,
      "Bạn đã truy cập vào danh sách cấm. Nếu tiếp tục vi phạm, bạn sẽ bị chặn."
    )
    return

  delay = message['text'].split()[2]
  if not delay.isnumeric():
    send_message(
      user_id,
      '⚠️ Nhập sai định dạng thời gian. Thời gian phải là một số nguyên.')
    return

  delay = int(delay)
  if user_id not in buy:
    delay = min(delay, 120)

  file_path = os.path.join(os.getcwd(), "sms.py")
  process = subprocess.Popen(["python", file_path, phone_number, str(delay)])
  processes.append(process)
  send_message(
    user_id,
    f'⚠️ Lưu ý trước khi sử dụng:\n- Khi bạn đã dùng BOT này thì bạn là người chịu hoàn toàn trách nhiệm do mình gây ra.\n- Chúng tôi sẽ không chịu bất cứ trách nhiệm nào từ việc bạn đã gây ra.\n\n🚀 Gửi Yêu Cầu Tấn Công Thành Công 🚀\n+ Số Tấn Công 📱: [ {phone_number} ]\n+ Thời Gian ⏰ : [ {delay} ] giây\n Lưu ý :\n+ free: thời gian max là: 120\n+ vip: thời gian không giới hạn\n\n\nMua vip tại @ceolecongdung'
  )


def status(message):
  status_list = []
  for idx, process in enumerate(processes, start=1):
    phone_number = process.args[2]
    delay = process.args[3]
    status_list.append(
      f'{idx}. 📱 Số điện thoại: {phone_number}, Thời gian: {delay} giây')
  if len(status_list) > 0:
    status_text = '🚀Danh sách số điện thoại và thời gian:🚀\n' + '\n'.join(
      status_list)
  else:
    status_text = '🚀Không có số điện thoại nào đang được spam.🚀'

  send_message(message['chat']['id'], status_text)


def help(message):
  help_text = '''
⚠️ Lưu ý trước khi sử dụng:
- Khi bạn đã dùng BOT này thì bạn là người chịu hoàn toàn trách nhiệm do mình gây ra.
- Chúng tôi sẽ không chịu bất cứ trách nhiệm nào từ việc bạn đã gây ra.
Xin cảm ơn!
🚀Danh sách lệnh:🚀
- /show: Xem số và thời gian bị spam
- /spam {số điện thoại} {thời gian spam}: Gửi SMS, CALL rác
 + free :{thời gian} max là: 120
 + vip  : {thời gian } không giới hạn 
- /stop {số điện thoại}: Dừng spam số điện thoại

Mua vip tại @ceolecongdung
'''
  send_message(message['chat']['id'], help_text)


def stop_spam(message):
  if len(message['text'].split()) < 2:
    send_message(message['chat']['id'],
                 '🚀VUI LÒNG NHẬP SỐ ĐIỆN THOẠI ĐỂ DỪNG SPAM🚀')
    return

  phone_number = message['text'].split()[1]

  stopped = False
  for process in processes:
    if process.args[2] == phone_number:
      try:
        process.terminate()
        processes.remove(process)
        stopped = True
      except:
        pass

  if stopped:
    send_message(message['chat']['id'], f'🚀ĐÃ DỪNG SPAM SỐ 📱: {phone_number}🚀')
  else:
    send_message(
      message['chat']['id'],
      f'🚀KHÔNG TÌM THẤY TIẾN TRÌNH SPAM CHO SỐ 📱: {phone_number}🚀 ')


def stop_all_spam(message):
  user_id = message['from']['id']

  if user_id == admin_id:
    for process in processes:
      try:
        process.terminate()
        processes.remove(process)
        send_message(message['chat']['id'],
                     f'🚀ĐÃ DỪNG SPAM SỐ 📱: {process.args[2]}🚀')
      except:
        pass

    if len(processes) == 0:
      send_message(message['chat']['id'],
                   '🚀Không có số điện thoại nào đang được spam.🚀')
  else:
    send_message(message['chat']['id'],
                 'Bạn không có quyền truy cập vào lệnh này.')


def process_message(message):
  command = message.get('text', '').split()[0].lower()
  if command == '/spam':
    lqm_sms(message)
  elif command == '/show':
    status(message)
  elif command in ['/start', '/help']:
    help(message)
  elif command == '/stop':
    stop_spam(message)
  elif command == '/stopall':
    stop_all_spam(message)


def handle_updates(updates):
  for update in updates:
    process_message(update['message'])


def get_updates(offset=None):
  url = bot_api_url + 'getUpdates'
  params = {'offset': offset, 'timeout': 60}
  response = requests.get(url, params=params)
  if response.status_code == 200:
    updates = response.json().get('result', [])
    return updates
  return []


def main():
  print('Bot started.')
  offset = None
  while True:
    updates = get_updates(offset)
    if updates:
      handle_updates(updates)
      offset = updates[-1]['update_id'] + 1


if __name__ == '__main__':
  from flask import Flask
  from threading import Thread

  app = Flask('')

  @app.route('/')
  def home():
    return "Bot is running."

  def run():
    app.run(host='0.0.0.0', port=8080)

  def keep_alive():
    t = Thread(target=run)
    t.start()

  keep_alive()
  main()
