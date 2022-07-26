import telegram

api_key = 'bot token'
user_id = 'user ID'

bot = telegram.Bot(token=api_key)
bot.send_message(chat_id=user_id, text='USP-Python has started up!')
