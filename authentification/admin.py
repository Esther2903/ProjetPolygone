from django.contrib import admin

from authentification.models import Login, Sign_up


# Register your models here.

# login admin
class loginAdmin(admin.ModelAdmin):
    list_display = ('email', 'password')


admin.site.register(Login, loginAdmin)


class sign_upAdmin(admin.ModelAdmin):
    list_display = ('nom', 'prenom', 'role', 'contact', 'email', 'password', 'confirmPassword')


admin.site.register(Sign_up, sign_upAdmin)
