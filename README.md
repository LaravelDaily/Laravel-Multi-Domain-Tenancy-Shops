Demo Laravel 6 to show subdomains for every user, so user can register with subdomain "my-company", and their own URL will become `my-company.[main_project].com`

Project is partly generated with [QuickAdminPanel](https://2019.quickadminpanel.com)

---

## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL 
- If you want to login, click `Login` on top-right and use credentials __admin@admin.com__ - __password__ 
- To configure subdomains, search for your web-server documentation, example `Homestead.yaml` snippet below:

```
sites:
    - map: company1.project.test
      to: /home/vagrant/Code/project/public
    - map: company2.project.test
      to: /home/vagrant/Code/project/public
    - map: project.test
      to: /home/vagrant/Code/project/public
```

---

## License

Basically, feel free to use and re-use any way you want.

---

## More from our LaravelDaily Team

- Check out our adminpanel generator [QuickAdminPanel](https://quickadminpanel.com)
- Read our [Blog with Laravel Tutorials](https://laraveldaily.com)
- FREE E-book: [50 Laravel Quick Tips (and counting)](https://laraveldaily.com/free-e-book-40-laravel-quick-tips-and-counting/)
- Subscribe to our [YouTube channel Laravel Business](https://www.youtube.com/channel/UCTuplgOBi6tJIlesIboymGA)
- Enroll in our [Laravel Online Courses](https://laraveldaily.teachable.com/)
