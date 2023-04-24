from django.contrib import messages, auth
from django.contrib.auth import authenticate, login
from django.contrib.auth.models import User
from django.http import HttpResponse
from django.shortcuts import render, redirect

from authentification.models import Login, Sign_up


# Create your views here.

# function welcome
def welcome(request):
    welcome = """
                <center>
                    <h1>Bienvenue sur l'application de gestion de stocks de <em>Polygone+</em></h1>
                    <p>Veuillez vous connectez <a href="login">login</a></p>
                </center>
                
              """
    return HttpResponse(welcome)


# function formulaire login
def formLogin(request):
    global resultat
    if request.method == 'POST':
        email = request.POST.get('email')
        password = request.POST.get('password')
        if email and password:
            resultat = Login.objects.filter(email=email, password=password)
            newLogin = Sign_up.objects.create(email=email, password=password)
            newLogin.save()
            return redirect("welcome")
        if len(resultat) != 1:
            erreur = True
            message = "Adresse mail ou mot de passe erroné(e)"
            context = {
                'error': erreur,
                'message': message
            }
            return render(request, 'auth/login.html', context)

        """ user = authenticate(email=email, password=password)
            if newLogin is not None:
                login(request, user)
                email = user.mail
                password = user.passwd
                return render(request, 'auth/welcome.html')
            else:
                messages.error(request, "Mauvais utilisateur")
                return redirect('login')"""
    else:
        return render(request, 'auth/login.html')




# function formulaire sign_up
def formSign_up(request):
    global message

    if request.method == 'POST':
        nom = request.POST.get('nom')
        prenom = request.POST.get('prenom')
        role = request.POST.get('role')
        contact = request.POST.get('contact')
        email = request.POST.get('email')
        password = request.POST.get('password')
        confirmPassword = request.POST.get('confirmPassword')

        if password == confirmPassword:
            if Sign_up.objects.filter(email=email).exists():
                messages.error(request, "Cet email est déjà utilsé pour ouvrir un compte")
                return redirect('auth/sign_up.html')
            elif Sign_up.objects.filter(password=password).exists():
                messages.error(request, "Cet mot de passe est déjà utilsé pour ouvrir un compte")
                return redirect('auth/sign_up.html')
            else:
                newSign_up = Sign_up.objects.create(nom=nom, prenom=prenom, role=role, contact=contact, email=email,
                                                    password=password, confirmPassword=confirmPassword)
                newSign_up.save()
                """
                      newSign_ups = User.objects.create_user(nom, prenom, role, contact, email, password, confirmPassword)
                      newSign_ups.mail = email
                      newSign_ups.passwd = password

                        newSign_ups.save()
                  """
                print('Compte crée')
                messages.success(request, "Votre compte a été crée avec succès...")
                print(nom)
                mail = email
                passwd = password

                return render(request, 'auth/login.html', {'mail': mail})
        else:
            print("mot de passe invalid")
            messages.error("Les mots de passe sont différents")
            return render(request, 'auth/sign_up.html')
    else:
        return render(request, 'auth/sign_up.html')


# function formulaire logout

def logout(request):
    auth.logout(request)
    return redirect('welcome')
