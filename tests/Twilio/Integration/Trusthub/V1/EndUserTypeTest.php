<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Tests\Integration\Trusthub\V1;

use Twilio\Exceptions\DeserializeException;
use Twilio\Exceptions\TwilioException;
use Twilio\Http\Response;
use Twilio\Tests\HolodeckTestCase;
use Twilio\Tests\Request;

class EndUserTypeTest extends HolodeckTestCase {
    public function testReadRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trusthub->v1->endUserTypes->read();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://trusthub.twilio.com/v1/EndUserTypes'
        ));
    }

    public function testReadEmptyResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "end_user_types": [],
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://trusthub.twilio.com/v1/EndUserTypes?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://trusthub.twilio.com/v1/EndUserTypes?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "end_user_types"
                }
            }
            '
        ));

        $actual = $this->twilio->trusthub->v1->endUserTypes->read();

        $this->assertNotNull($actual);
    }

    public function testReadFullResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "meta": {
                    "page": 0,
                    "page_size": 50,
                    "first_page_url": "https://trusthub.twilio.com/v1/EndUserTypes?PageSize=50&Page=0",
                    "previous_page_url": null,
                    "url": "https://trusthub.twilio.com/v1/EndUserTypes?PageSize=50&Page=0",
                    "next_page_url": null,
                    "key": "end_user_types"
                },
                "end_user_types": [
                    {
                        "url": "https://trusthub.twilio.com/v1/EndUserTypes/OYaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                        "fields": [
                            {
                                "machine_name": "last_name",
                                "friendly_name": "Last Name",
                                "constraint": "String"
                            },
                            {
                                "machine_name": "email",
                                "friendly_name": "Email",
                                "constraint": "String"
                            },
                            {
                                "machine_name": "first_name",
                                "friendly_name": "First Name",
                                "constraint": "String"
                            },
                            {
                                "machine_name": "business_title",
                                "friendly_name": "Business Title",
                                "constraint": "String"
                            },
                            {
                                "machine_name": "phone_number",
                                "friendly_name": "Phone Number",
                                "constraint": "String"
                            },
                            {
                                "machine_name": "job_position",
                                "friendly_name": "Job Position",
                                "constraint": "String"
                            }
                        ],
                        "machine_name": "authorized_representative_1",
                        "friendly_name": "Authorized Representative one",
                        "sid": "OYaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
                    }
                ]
            }
            '
        ));

        $actual = $this->twilio->trusthub->v1->endUserTypes->read();

        $this->assertGreaterThan(0, \count($actual));
    }

    public function testFetchRequest(): void {
        $this->holodeck->mock(new Response(500, ''));

        try {
            $this->twilio->trusthub->v1->endUserTypes("OYXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();
        } catch (DeserializeException $e) {}
          catch (TwilioException $e) {}

        $this->assertRequest(new Request(
            'get',
            'https://trusthub.twilio.com/v1/EndUserTypes/OYXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'
        ));
    }

    public function testFetchResponse(): void {
        $this->holodeck->mock(new Response(
            200,
            '
            {
                "url": "https://trusthub.twilio.com/v1/EndUserTypes/OYaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa",
                "fields": [
                    {
                        "machine_name": "last_name",
                        "friendly_name": "Last Name",
                        "constraint": "String"
                    },
                    {
                        "machine_name": "email",
                        "friendly_name": "Email",
                        "constraint": "String"
                    },
                    {
                        "machine_name": "first_name",
                        "friendly_name": "First Name",
                        "constraint": "String"
                    },
                    {
                        "machine_name": "business_title",
                        "friendly_name": "Business Title",
                        "constraint": "String"
                    },
                    {
                        "machine_name": "phone_number",
                        "friendly_name": "Phone Number",
                        "constraint": "String"
                    },
                    {
                        "machine_name": "job_position",
                        "friendly_name": "Job Position",
                        "constraint": "String"
                    }
                ],
                "machine_name": "authorized_representative_1",
                "friendly_name": "Authorized Representative one",
                "sid": "OYaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa"
            }
            '
        ));

        $actual = $this->twilio->trusthub->v1->endUserTypes("OYXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")->fetch();

        $this->assertNotNull($actual);
    }
}