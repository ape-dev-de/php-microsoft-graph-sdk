<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MeetingTimeSuggestionsResult;

/**
 * Request builder for /me/findMeetingTimes
 */
class FindMeetingTimesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action findMeetingTimes
     * @param MeetingTimeSuggestionsResult|\stdClass $body Request body
     * @return MeetingTimeSuggestionsResult|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(MeetingTimeSuggestionsResult|\stdClass $body): MeetingTimeSuggestionsResult|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to MeetingTimeSuggestionsResult|\stdClass|null
     */
    private function deserializePost(string $body): MeetingTimeSuggestionsResult|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new MeetingTimeSuggestionsResult($data);
    }
}
