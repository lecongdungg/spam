import datetime
import time
import os
import subprocess
import psutil
import hashlib
import requests
from datetime import datetime, timedelta
from aiogram import Bot, Dispatcher, executor, types
from keep_alive import keep_alive

bot = Bot(token=os.getenv("tg_token"))
dp = Dispatcher(bot)
ADMIN_IDS = [6262131787, 5078663873]
processes = []
keep_alive()


@dp.message_handler(commands=['spam'])
async def lqm_sms(message: types.Message):
  user_id = message.from_user.id
  if len(message.text.split()) < 3:
    await message.reply('🚀VUI LÒNG NHẬP SỐ ĐIỆN THOẠI VÀ THỜI GIAN DELAY🚀 ')
    return

  phone_number = message.text.split()[1]
  if not phone_number.isnumeric():
    await message.reply('🚀SỐ ĐIỆN THOẠI KHÔNG HỢP LỆ !🚀')
    return

  if phone_number in [
      '113', '911', '114', '115', '0387069080', '0344556382', '0819876977'
  ]:
    # Số điện thoại nằm trong danh sách cấm
    await message.reply(
      "Bạn đã truy cập vào danh sách cấm nếu còn vi phạm bạn sẽ bị đuổi")
    return

  delay = int(message.text.split()[2])
  if user_id in ADMIN_IDS:
    # Cho phép ADMIN_ID sử dụng thời gian delay tùy ý
    pass
  else:
    delay = min(delay, 50)
  file_path = os.path.join(os.getcwd(), "sms.py")
  process = subprocess.Popen(["python", file_path, phone_number, str(delay)])
  processes.append(process)
  await message.reply(
    f'🚀 Gửi Yêu Cầu Tấn Công Thành Công 🚀\n+ Số Tấn Công 📱: [ {phone_number} ]\n+ Thời Gian ⏰: [ {delay} ] giây\n\n⚡Mua vip tại: @ceolecongdung ⚡'
  )


@dp.message_handler(commands=['show'])
async def status(message: types.Message):
  status_list = []
  for process in processes:
    phone_number = process.args[2]
    delay = process.args[3]
    status_list.append(
      f'📱 Số điện thoại: {phone_number}, Thời gian: {delay} giây')
  if len(status_list) > 0:
    status_text = '🚀Danh sách số điện thoại và thời gian:🚀\n' + '\n'.join(
      status_list)
  else:
    status_text = '🚀Không có số điện thoại nào đang được spam.🚀'

  await message.reply(status_text)


@dp.message_handler(commands=['start'])
async def help_command(message: types.Message):
  help_text = '''
⚠️ Lưu ý trước khi sử dụng:
- Khi bạn đã dùng BOT này thì bạn là người chịu hoàn toàn trách nhiệm do mình gây ra. 
- Chúng tôi sẽ không chịu bất cứ trách nhiệm nào từ việc bạn đã gây ra.
Xin cảm ơn!
    
🚀Danh sách lệnh:🚀
- /show: Xem số và thời gian bị spam
- /spam {số điện thoại} {thời gian spam}: Gửi tin nhắn SMS yêu cầu (quyền admin).
 + free: thời gian tối đa 50
 + vip: không giới hạn thời gian
- /stop {số điện thoại}: Dừng spam số điện thoại

⚡Mua vip tại: @ceolecongdung ⚡

'''
  await message.reply(help_text)


@dp.message_handler(commands=['help'])
async def help_command(message: types.Message):
  help_text = '''
⚠️ Lưu ý trước khi sử dụng:
- Khi bạn đã dùng BOT này thì bạn là người chịu hoàn toàn trách nhiệm do mình gây ra. 
- Chúng tôi sẽ không chịu bất cứ trách nhiệm nào từ việc bạn đã gây ra.
Xin cảm ơn!
    
🚀Danh sách lệnh:🚀
- /show: Xem số và thời gian bị spam
- /spam {số điện thoại} {thời gian spam}: Gửi tin nhắn SMS yêu cầu (quyền admin).
 + free: thời gian tối đa 50
 + vip: không giới hạn thời gian
- /stop {số điện thoại}: Dừng spam số điện thoại

⚡Mua vip tại: @ceolecongdung ⚡

'''
  await message.reply(help_text)


@dp.message_handler(commands=['stop'])
async def stop_spam(message: types.Message):
  user_id = message.from_user.id
  if len(message.text.split()) < 2:
    await message.reply('🚀VUI LÒNG NHẬP SỐ ĐIỆN THOẠI ĐỂ DỪNG SPAM🚀')
    return
  phone_number = message.text.split()[1]
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
    await message.reply(f'🚀ĐÃ DỪNG SPAM SỐ 📱: {phone_number}🚀')
  else:
    await message.reply(
      f'🚀KHÔNG TÌM THẤY TIẾN TRÌNH SPAM CHO SỐ 📱: {phone_number}🚀')


if __name__ == "__main__":
  executor.start_polling(dp)
