<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Groups\Team\Channels;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ProvisionChannelEmailResult;

/**
 * Request builder for /groups/{group-id}/team/channels/{channel-id}/provisionEmail
 */
class ProvisionEmailRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action provisionEmail
     * @param ProvisionChannelEmailResult|\stdClass $body Request body
     * @return ProvisionChannelEmailResult|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(ProvisionChannelEmailResult|\stdClass $body): ProvisionChannelEmailResult|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to ProvisionChannelEmailResult|\stdClass|null
     */
    private function deserializePost(string $body): ProvisionChannelEmailResult|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ProvisionChannelEmailResult($data);
    }
}
