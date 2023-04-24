# Generated by Django 4.2 on 2023-04-23 10:34

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('authentification', '0001_initial'),
    ]

    operations = [
        migrations.CreateModel(
            name='Sign_up',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('nom', models.CharField(max_length=30)),
                ('prenom', models.CharField(max_length=30)),
                ('role', models.CharField(max_length=100)),
                ('contact', models.IntegerField(max_length=20)),
                ('email', models.CharField(max_length=100)),
                ('password', models.CharField(max_length=100)),
                ('confirmPassword', models.CharField(max_length=100)),
            ],
            options={
                'verbose_name': 'Sign_up',
                'verbose_name_plural': 'Sign_up',
            },
        ),
    ]
