from django.db import models


# Create your models here.

# table login
class Login(models.Model):
    email = models.CharField(max_length=100)
    password = models.CharField(max_length=100)

    class Meta:
        verbose_name = 'Login'
        verbose_name_plural = 'Login'

    def __int__(self):
        return self.email

# table sign_up
class Sign_up(models.Model):

    roles = [
        ("Administrateur", "Administrateur"),
        ("Acheteur", "Acheteur"),
        ("Vendeur", "Vendeur"),
        ("Vendeuse", "Vendeuse"),
    ]
    nom = models.CharField(max_length=30)
    prenom = models.CharField(max_length=30)
    role = models.CharField(max_length=100, choices=roles)
    contact = models.IntegerField()
    email = models.CharField(max_length=100)
    password = models.CharField(max_length=100)
    confirmPassword = models.CharField(max_length=100)
    class Meta:
        verbose_name = 'Sign_up'
        verbose_name_plural = 'Sign_up'

    def __int__(self):
        return self.nom
