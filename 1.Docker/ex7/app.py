import os

app_env = os.getenv('APP_ENV', 'undefined')

print(f"The value of APP_ENV is: {app_env}")
