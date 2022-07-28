import telegram

api_key = 'bot token'
user_id = 'user ID'

photo_url = input('Your Photo URL :')
desc = input('Your Caption :')

bot = telegram.Bot(token=api_key)

bot.send_photo(chat_id=user_id, photo=photo_url, caption=desc, reply_markup=telegram.InlineKeyboardMarkup ( [
        [telegram.InlineKeyboardButton(text='Button Top', url='https://t.me')],
        [telegram.InlineKeyboardButton(text='Button Bottom', url='https://t.me')],
    ] ))
