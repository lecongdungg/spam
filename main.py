import telebot
import os
import subprocess
from keep_alive import keep_alive

keep_alive()


bot_token = '6334994010:AAEka068QXAJen3QmsBGQujsNhFvPVtNZO0'  # Thay YOUR_BOT_TOKEN bằng mã token của bot của bạn
bot = telebot.TeleBot(bot_token)
processes = []


@bot.message_handler(commands=['spam'])
def lqm_sms(message):
    try:
        if len(message.text.split()) < 3:
            bot.reply_to(message, '🚀VUI LÒNG NHẬP SỐ ĐIỆN THOẠI VÀ THỜI GIAN DELAY🚀 ')
            return
        phone_number = message.text.split()[1]
        if not phone_number.isnumeric():
            bot.reply_to(message, '🚀SỐ ĐIỆN THOẠI KHÔNG HỢP LỆ !🚀')
            return
        if phone_number in [
            '113', '911', '114', '115', '0387069080', '0344556382', '0819876977'
        ]:
            # Số điện thoại nằm trong danh sách cấm
            bot.reply_to(
                message,
                "Bạn đã truy cập vào danh sách cấm. Nếu tiếp tục vi phạm, bạn sẽ bị đuổi"
            )
            return
        delay = int(message.text.split()[2])
        if delay > 120:
            bot.reply_to(message, '🚀THỜI GIAN DELAY TỐI ĐA LÀ 120 GIÂY!🚀')
            return
        file_path = os.path.join(os.getcwd(), "sms.py")
        process = subprocess.Popen(["python", file_path, phone_number, str(delay)])
        processes.append(process)
        bot.reply_to(
            message,
            f'⚠️ Lưu ý trước khi sử dụng:\n- Khi bạn đã sử dụng BOT này, bạn sẽ chịu hoàn toàn trách nhiệm với những hành động của mình.\n- Chúng tôi sẽ không chịu bất kỳ trách nhiệm nào từ việc bạn sử dụng BOT.🚀 Gửi Yêu Cầu Tấn Công Thành Công 🚀\n+ Số Tấn Công 📱: [ {phone_number} ]\n+ Thời Gian ⏰ : [ {delay} ] giây\n\nTham gia nhóm ChatGpt, spam sms call tại @chatlcd\n\nhttps://t.me/chatlcd '
        )
    except Exception as e:
        print(f"Lỗi khi xử lý lệnh /spam: {e}")


@bot.message_handler(commands=['show'])
def status(message):
    try:
        if len(processes) > 0:
            status_list = []
            for index, process in enumerate(processes, start=1):
                phone_number = process.args[2]
                delay = process.args[3]
                status_list.append(
                    f'{index}. 📱 Số điện thoại: {phone_number}, Thời gian: {delay} giây')

            status_text = '🚀 Danh sách số điện thoại và thời gian: 🚀\n' + '\n'.join(
                status_list)
        else:
            status_text = '🚀 Không có số điện thoại nào đang được spam. 🚀'

        bot.reply_to(message, status_text)
    except Exception as e:
        print(f"Lỗi khi xử lý lệnh /show: {e}")


@bot.message_handler(commands=['start', 'help'])
def help(message):
    try:
        help_text = '''
⚠️ Lưu ý trước khi sử dụng:
- Khi bạn đã sử dụng BOT này, bạn sẽ chịu hoàn toàn trách nhiệm với những hành động của mình.
- Chúng tôi sẽ không chịu bất kỳ trách nhiệm nào từ việc bạn sử dụng BOT.
Xin cảm ơn!

🚀Danh sách lệnh:🚀
- /show: Xem số điện thoại và thời gian đang bị spam
- /spam {số điện thoại} {thời gian spam}: Gửi SMS, CALL rác
- /stop {số điện thoại}: Dừng spam số điện thoại

Tham gia nhóm ChatGpt, spam sms call tại @chatlcd

https://t.me/chatlcd
'''
        bot.reply_to(message, help_text)
    except Exception as e:
        print(f"Lỗi khi xử lý lệnh /start hoặc /help: {e}")


@bot.message_handler(commands=['stop'])
def stop_spam(message):
    try:
        if len(message.text.split()) < 2:
            bot.reply_to(message, '🚀VUI LÒNG NHẬP SỐ ĐIỆN THOẠI ĐỂ DỪNG SPAM🚀')
            return
        phone_number = message.text.split()[1]
        stopped = False
        found_in_spam_list = False

        for process in processes:
            if process.args[2] == phone_number:
                try:
                    process.terminate()
                    processes.remove(process)
                    stopped = True
                except:
                    pass
                found_in_spam_list = True

        if stopped:
            bot.reply_to(message, f'🚀ĐÃ DỪNG SPAM SỐ 📱: {phone_number}🚀')
        elif not found_in_spam_list:
            bot.reply_to(message,
                         f'🚫SỐ 📱 {phone_number} KHÔNG CÓ TRONG DANH SÁCH SPAM🚫')
    except Exception as e:
        print(f"Lỗi khi xử lý lệnh /stop: {e}")


while True:
    try:
        bot.polling()
    except Exception as e:
        print(f"Lỗi khi chạy bot: {e}")
        # Xử lý ngoại lệ và tiếp tục chạy bot
        continue
