<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Trusthub\V1\CustomerProfiles;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class CustomerProfilesEntityAssignmentsTest extends HolodeckTestCase {
    public function testCreateRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trusthub->v1->customerProfiles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->customerProfilesEntityAssignments->create("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $values = ['ObjectSid' => "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX", ];

        $this->assertRequest(new Request(
            'post',
            'https://trusthub.twilio.com/v1/CustomerProfiles/BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/EntityAssignments',
            null,
            $values
        ));
    }

    public function testCreateResponse(): void {
        $this->holodeck->mock(new Response(
            201,
            '
            {
                "sid": "BVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "customer_profile_sid": "BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "object_sid": "RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2019-07-31T02:34:41Z",
                "url": "https://trusthub.twilio.com/v1/CustomerProfiles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/EntityAssignments/BVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->trusthub->v1->customerProfiles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->customerProfilesEntityAssignments->create("ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

        $this->assertNotNull($actual);
    }

    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trusthub->v1->customerProfiles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->customerProfilesEntityAssignments->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://trusthub.twilio.com/v1/CustomerProfiles/BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/EntityAssignments'
        ));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "results": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://trusthub.twilio.com/v1/CustomerProfiles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/EntityAssignments?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://trusthub.twilio.com/v1/CustomerProfiles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/EntityAssignments?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "results"
                }
            }
            '
        ));

        $actual = $this->twilio->trusthub->v1->customerProfiles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->customerProfilesEntityAssignments->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "results": [
                    {
                        "sid": "BVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "customer_profile_sid": "BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "object_sid": "RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "date_created": "2019-07-31T02:34:41Z",
                        "url": "https://trusthub.twilio.com/v1/CustomerProfiles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/EntityAssignments/BVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://trusthub.twilio.com/v1/CustomerProfiles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/EntityAssignments?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://trusthub.twilio.com/v1/CustomerProfiles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/EntityAssignments?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "results"
                }
            }
            '
        ));

        $actual = $this->twilio->trusthub->v1->customerProfiles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->customerProfilesEntityAssignments->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trusthub->v1->customerProfiles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->customerProfilesEntityAssignments("BVXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://trusthub.twilio.com/v1/CustomerProfiles/BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/EntityAssignments/BVXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "sid": "BVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "customer_profile_sid": "BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "account_sid": "ACaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "object_sid": "RDaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "date_created": "2019-07-31T02:34:41Z",
                "url": "https://trusthub.twilio.com/v1/CustomerProfiles/BUaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa/EntityAssignments/BVaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->trusthub->v1->customerProfiles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->customerProfilesEntityAssignments("BVXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }

    public function testDeleteRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trusthub->v1->customerProfiles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                       ->customerProfilesEntityAssignments("BVXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'delete',
            'https://trusthub.twilio.com/v1/CustomerProfiles/BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX/EntityAssignments/BVXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testDeleteResponse(): void {
        $this->holodeck->mock(new Response(
            204,
            null
        ));

        $actual = $this->twilio->trusthub->v1->customerProfiles("BUXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                             ->customerProfilesEntityAssignments("BVXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->delete();

        $this->assertTrue($actual);
    }
}