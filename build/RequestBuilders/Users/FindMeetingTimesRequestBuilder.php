<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\MeetingTimeSuggestionsResult;

/**
 * Request builder for /users/{user-id}/findMeetingTimes
 */
class FindMeetingTimesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action findMeetingTimes
     * @param MeetingTimeSuggestionsResult|\stdClass $body Request body
     * @return MeetingTimeSuggestionsResult|\stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(MeetingTimeSuggestionsResult|\stdClass $body): MeetingTimeSuggestionsResult|\stdClass
    {
        // Convert model to array
        $bodyData = (array)$body;
        $response = $this->client->post($this->requestUrl, $bodyData);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to MeetingTimeSuggestionsResult|\stdClass
     */
    private function deserializePost(string $body): mixed
    {
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
