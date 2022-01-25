<b> Four active API end points: </b>

1. “/persons” -> fetch all the persons living in the city
No query parameters needed

2. “/carsonastreet” - Fetch all cars given a 'streetname'
Query parameter: “streetname”
Sample reoute - "/api/v1/carsonastreet?streetname=Dorothy Crest"

3. “/owners” -> "Fetch Owner/Owners of a vehicle, given the 'licenseplate'"
Query parameter: “licenseplate”

Sample route -> "/api/v1/owners?licenseplate=7335768"

4. ”fulladdress” -> "Fetch full address and street details of a house,
                     given a person's first and last name"
Query parameters: firstname, lastname

Sample route - "/api/v1/fulladdress?firstname=Kaylee&lastname=Ward"

Key points:

1. All four API routes should be suffixed with 'v1'
    sample: 'api/v1/{endpoint}'

2. Please use the below give bearer token for the authorization

Bearer token:

"eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiYTQ1NmU4N2E5MmZmNDJkM2E1N2JkNzExMGYzYTgwYTVkMmZhMTdhMTJlZTgwZTMwM2QzZGYwZDhhMjEyYjQ5ZjA3NTUzZTA0NWE4YjU1NDEiLCJpYXQiOjE2NDI5NzQ1ODIuNzA5NTg4LCJuYmYiOjE2NDI5NzQ1ODIuNzA5NTkzLCJleHAiOjE2NzQ1MTA1ODIuNjY1NjU2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.b7XWO_ujpv56FjVyJ8mMbYmnYgeKjWI4YeYcp0fCn5ORrQkx4kCLOASYA7ulHi5G5eZb0LKQL4BrwC95CXHahZKERV5WHg28l9PfA0DzVFiaF9cZTUv5l8J8JTMSA7L8deAqycTHDBWvZdlou19UuUhSVdmtIOLnxgByqeYP1iqP04RjNepdTGJzeRwl2VkMaq5z7QtE55EO8cII3mErcr2mL02PLItgdPCeLhb9Ky95lgyXderNIpwGVgAFHocpiXgsJMotUYaBiuRjokECwz9r_nL2jsu04aZ_t5YWmtWnhdTQdl_ukh6U9J8tOl7Q17qZYZQC716z6xXwdiSZNpkFWLZByjspvlzDJBmkVv4alf3pViqK1Ka2CW5oN4pu1MN1M733SLSK8OqKsebdpqYubSeiRLhljo0rDtk-LOPD3X-vZ7_Z-InvGByU1_YBSoiEHYZVOWEN5X_KaOt7VFiDH3uqaSjh_JkFOKD32gl7_FrQGMnEa9vGB5-cnou8jdhN8zfq6ClR9rev4Hv8tkkVmAfDZAKeUOhXbv58cb8zPZxDnEPJ9OeQrtripw5Tlh-xoPLnM0X42DxxosuR7PZG01iT2fM-rV_Bzu5j0m16wDeyRscZzdQtjk__zzJWIk-PBD5Z5kfPCTm_kfAr4fRUECI9VQ6SuJC9WQPO4uk"


3. PHPUnit test cases are also available at “tests/versionOneApiTest.php”
Command to run the test cases - "./vendor/bin/phpunit"


<!-- <p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**
- **[Romega Software](https://romegasoftware.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->
