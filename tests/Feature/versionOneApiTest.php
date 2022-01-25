<?php

namespace Tests\Feature;

use App\Models\Car;
use App\Models\Person;
use App\Models\Street;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Log;

class versionOneApiTest extends TestCase
{
    /** ========================================================
     * FUNCTION: test_fetch_all_people_in_city()
     * 
     * INPUT PARAMETERS:
     *      None.
     * 
     * RETURN:
     *      None.
     * 
     * IMPLEMENTATION:
     *      Test the API route '/persons'.
     * 
     * HISTORY:
     *      2022-01-24 Uday - Created.
     * ========================================================
     */
    public function test_fetch_all_people_in_city() {
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiYTQ1NmU4N2E5MmZmNDJkM2E1N2JkNzExMGYzYTgwYTVkMmZhMTdhMTJlZTgwZTMwM2QzZGYwZDhhMjEyYjQ5ZjA3NTUzZTA0NWE4YjU1NDEiLCJpYXQiOjE2NDI5NzQ1ODIuNzA5NTg4LCJuYmYiOjE2NDI5NzQ1ODIuNzA5NTkzLCJleHAiOjE2NzQ1MTA1ODIuNjY1NjU2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.b7XWO_ujpv56FjVyJ8mMbYmnYgeKjWI4YeYcp0fCn5ORrQkx4kCLOASYA7ulHi5G5eZb0LKQL4BrwC95CXHahZKERV5WHg28l9PfA0DzVFiaF9cZTUv5l8J8JTMSA7L8deAqycTHDBWvZdlou19UuUhSVdmtIOLnxgByqeYP1iqP04RjNepdTGJzeRwl2VkMaq5z7QtE55EO8cII3mErcr2mL02PLItgdPCeLhb9Ky95lgyXderNIpwGVgAFHocpiXgsJMotUYaBiuRjokECwz9r_nL2jsu04aZ_t5YWmtWnhdTQdl_ukh6U9J8tOl7Q17qZYZQC716z6xXwdiSZNpkFWLZByjspvlzDJBmkVv4alf3pViqK1Ka2CW5oN4pu1MN1M733SLSK8OqKsebdpqYubSeiRLhljo0rDtk-LOPD3X-vZ7_Z-InvGByU1_YBSoiEHYZVOWEN5X_KaOt7VFiDH3uqaSjh_JkFOKD32gl7_FrQGMnEa9vGB5-cnou8jdhN8zfq6ClR9rev4Hv8tkkVmAfDZAKeUOhXbv58cb8zPZxDnEPJ9OeQrtripw5Tlh-xoPLnM0X42DxxosuR7PZG01iT2fM-rV_Bzu5j0m16wDeyRscZzdQtjk__zzJWIk-PBD5Z5kfPCTm_kfAr4fRUECI9VQ6SuJC9WQPO4uk";

        $response = $this->withHeader('Authorization', 'Bearer ' . $token)
        ->json('get', '/api/v1/persons', [
            'email' => 'udaykrish@gmail.com'
        ]);

        $response->assertStatus(200);
    }

    /** ========================================================
     * FUNCTION: test_fetch_all_cars_in_a_street()
     * 
     * INPUT PARAMETERS:
     *      None.
     * 
     * RETURN:
     *      None.
     * 
     * IMPLEMENTATION:
     *      Test the API route '/carsonastreet' with 'streetname' parameters.
     * 
     * HISTORY:
     *      2022-01-24 Uday - Created.
     * ========================================================
     */
    public function test_fetch_all_cars_in_a_street() {
        $randomStreetName = Street::inRandomOrder()->limit(1)->value('street_name');
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiYTQ1NmU4N2E5MmZmNDJkM2E1N2JkNzExMGYzYTgwYTVkMmZhMTdhMTJlZTgwZTMwM2QzZGYwZDhhMjEyYjQ5ZjA3NTUzZTA0NWE4YjU1NDEiLCJpYXQiOjE2NDI5NzQ1ODIuNzA5NTg4LCJuYmYiOjE2NDI5NzQ1ODIuNzA5NTkzLCJleHAiOjE2NzQ1MTA1ODIuNjY1NjU2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.b7XWO_ujpv56FjVyJ8mMbYmnYgeKjWI4YeYcp0fCn5ORrQkx4kCLOASYA7ulHi5G5eZb0LKQL4BrwC95CXHahZKERV5WHg28l9PfA0DzVFiaF9cZTUv5l8J8JTMSA7L8deAqycTHDBWvZdlou19UuUhSVdmtIOLnxgByqeYP1iqP04RjNepdTGJzeRwl2VkMaq5z7QtE55EO8cII3mErcr2mL02PLItgdPCeLhb9Ky95lgyXderNIpwGVgAFHocpiXgsJMotUYaBiuRjokECwz9r_nL2jsu04aZ_t5YWmtWnhdTQdl_ukh6U9J8tOl7Q17qZYZQC716z6xXwdiSZNpkFWLZByjspvlzDJBmkVv4alf3pViqK1Ka2CW5oN4pu1MN1M733SLSK8OqKsebdpqYubSeiRLhljo0rDtk-LOPD3X-vZ7_Z-InvGByU1_YBSoiEHYZVOWEN5X_KaOt7VFiDH3uqaSjh_JkFOKD32gl7_FrQGMnEa9vGB5-cnou8jdhN8zfq6ClR9rev4Hv8tkkVmAfDZAKeUOhXbv58cb8zPZxDnEPJ9OeQrtripw5Tlh-xoPLnM0X42DxxosuR7PZG01iT2fM-rV_Bzu5j0m16wDeyRscZzdQtjk__zzJWIk-PBD5Z5kfPCTm_kfAr4fRUECI9VQ6SuJC9WQPO4uk";

        $response = $this->withToken($token, $type = 'Bearer')
                ->json('get', '/api/v1/carsonastreet?streetname=' . $randomStreetName);

        $response->assertStatus(200);
    }

    /** ========================================================
     * FUNCTION: test_fetch_owners_given_licenseplate()
     * 
     * INPUT PARAMETERS:
     *      None.
     * 
     * RETURN:
     *      None.
     * 
     * IMPLEMENTATION:
     *      Test the API route '/owners' with 'licenseplate' parameters.
     * 
     * HISTORY:
     *      2022-01-24 Uday - Created.
     * ========================================================
     */
    public function test_fetch_owners_given_licenseplate() {
        $randomLicensePlate = Car::inRandomOrder()->limit(1)->value('license_plate');
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiYTQ1NmU4N2E5MmZmNDJkM2E1N2JkNzExMGYzYTgwYTVkMmZhMTdhMTJlZTgwZTMwM2QzZGYwZDhhMjEyYjQ5ZjA3NTUzZTA0NWE4YjU1NDEiLCJpYXQiOjE2NDI5NzQ1ODIuNzA5NTg4LCJuYmYiOjE2NDI5NzQ1ODIuNzA5NTkzLCJleHAiOjE2NzQ1MTA1ODIuNjY1NjU2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.b7XWO_ujpv56FjVyJ8mMbYmnYgeKjWI4YeYcp0fCn5ORrQkx4kCLOASYA7ulHi5G5eZb0LKQL4BrwC95CXHahZKERV5WHg28l9PfA0DzVFiaF9cZTUv5l8J8JTMSA7L8deAqycTHDBWvZdlou19UuUhSVdmtIOLnxgByqeYP1iqP04RjNepdTGJzeRwl2VkMaq5z7QtE55EO8cII3mErcr2mL02PLItgdPCeLhb9Ky95lgyXderNIpwGVgAFHocpiXgsJMotUYaBiuRjokECwz9r_nL2jsu04aZ_t5YWmtWnhdTQdl_ukh6U9J8tOl7Q17qZYZQC716z6xXwdiSZNpkFWLZByjspvlzDJBmkVv4alf3pViqK1Ka2CW5oN4pu1MN1M733SLSK8OqKsebdpqYubSeiRLhljo0rDtk-LOPD3X-vZ7_Z-InvGByU1_YBSoiEHYZVOWEN5X_KaOt7VFiDH3uqaSjh_JkFOKD32gl7_FrQGMnEa9vGB5-cnou8jdhN8zfq6ClR9rev4Hv8tkkVmAfDZAKeUOhXbv58cb8zPZxDnEPJ9OeQrtripw5Tlh-xoPLnM0X42DxxosuR7PZG01iT2fM-rV_Bzu5j0m16wDeyRscZzdQtjk__zzJWIk-PBD5Z5kfPCTm_kfAr4fRUECI9VQ6SuJC9WQPO4uk";

        $response = $this->withToken($token, $type = 'Bearer')
                ->json('get', '/api/v1/owners?licenseplate=' . $randomLicensePlate);

        $response->assertStatus(200);
    }

    /** ========================================================
     * FUNCTION: test_fetch_fulladdress_given_personname()
     * 
     * INPUT PARAMETERS:
     *      None.
     * 
     * RETURN:
     *      None.
     * 
     * IMPLEMENTATION:
     *      Test the API route '/fulladdress' with 'firstname', 'lastname' parameters.
     * 
     * HISTORY:
     *      2022-01-24 Uday - Created.
     * ========================================================
     */
    public function test_fetch_fulladdress_given_personname() {
        $randomPerson = Person::inRandomOrder()->limit(1)->get()->toArray();
        $token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiYTQ1NmU4N2E5MmZmNDJkM2E1N2JkNzExMGYzYTgwYTVkMmZhMTdhMTJlZTgwZTMwM2QzZGYwZDhhMjEyYjQ5ZjA3NTUzZTA0NWE4YjU1NDEiLCJpYXQiOjE2NDI5NzQ1ODIuNzA5NTg4LCJuYmYiOjE2NDI5NzQ1ODIuNzA5NTkzLCJleHAiOjE2NzQ1MTA1ODIuNjY1NjU2LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.b7XWO_ujpv56FjVyJ8mMbYmnYgeKjWI4YeYcp0fCn5ORrQkx4kCLOASYA7ulHi5G5eZb0LKQL4BrwC95CXHahZKERV5WHg28l9PfA0DzVFiaF9cZTUv5l8J8JTMSA7L8deAqycTHDBWvZdlou19UuUhSVdmtIOLnxgByqeYP1iqP04RjNepdTGJzeRwl2VkMaq5z7QtE55EO8cII3mErcr2mL02PLItgdPCeLhb9Ky95lgyXderNIpwGVgAFHocpiXgsJMotUYaBiuRjokECwz9r_nL2jsu04aZ_t5YWmtWnhdTQdl_ukh6U9J8tOl7Q17qZYZQC716z6xXwdiSZNpkFWLZByjspvlzDJBmkVv4alf3pViqK1Ka2CW5oN4pu1MN1M733SLSK8OqKsebdpqYubSeiRLhljo0rDtk-LOPD3X-vZ7_Z-InvGByU1_YBSoiEHYZVOWEN5X_KaOt7VFiDH3uqaSjh_JkFOKD32gl7_FrQGMnEa9vGB5-cnou8jdhN8zfq6ClR9rev4Hv8tkkVmAfDZAKeUOhXbv58cb8zPZxDnEPJ9OeQrtripw5Tlh-xoPLnM0X42DxxosuR7PZG01iT2fM-rV_Bzu5j0m16wDeyRscZzdQtjk__zzJWIk-PBD5Z5kfPCTm_kfAr4fRUECI9VQ6SuJC9WQPO4uk";

        $response = $this->withToken($token, $type = 'Bearer')
                ->json('get', '/api/v1/fulladdress?firstname='
                 . $randomPerson[0]['first_name'] . '&' . 'lastname=' 
                 . $randomPerson[0]['last_name']);

        $response->assertStatus(200);
    }
}
