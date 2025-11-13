<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\JoinedTeams\Schedule\TimeCards;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TimeCard;

/**
 * Request builder for /me/joinedTeams/{team-id}/schedule/timeCards/{timeCard-id}/clockOut
 */
class ClockOutRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action clockOut
     * @param TimeCard|\stdClass $body Request body
     * @return TimeCard|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(TimeCard|\stdClass $body): TimeCard|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to TimeCard|\stdClass|null
     */
    private function deserializePost(string $body): TimeCard|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TimeCard($data);
    }
}
