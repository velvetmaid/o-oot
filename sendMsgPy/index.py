import telegram

api_key = 'bot token'
user_id = 'user ID'

bot = telegram.Bot(token=api_key)

bot.send_photo(chat_id=user_id, photo="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqtU1UzVIP7PA7FoiLTXXdosETBSLG_sxLdqWJqgeXkZ60kLE15ochjtOy&s=10", caption="#k-on \nK-ON Test.", reply_markup=telegram.InlineKeyboardMarkup ( [
        [telegram.InlineKeyboardButton(text='on Facebook', url='https://facebook.com')],
        [telegram.InlineKeyboardButton(text='on Telegram', url='https://t.me')],
    ] ))
