from django.urls import path

from authentification.views import welcome, formLogin, formSign_up, logout

urlpatterns = [
    path('welcome', welcome, name="welcome"),
    path('login', formLogin, name="login"),
    path('sign_up', formSign_up, name="sign_up"),
    path('logout', logout, name="logout"),

]
