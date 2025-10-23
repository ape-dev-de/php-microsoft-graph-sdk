<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;

/**
 * Request builder for getDeviceManagementIntentPerSettingContributingProfiles
 */
class GetDeviceManagementIntentPerSettingContributingProfilesRequestBuilder extends BaseRequestBuilder
{
    /**
     * Invoke action getDeviceManagementIntentPerSettingContributingProfiles
     * @param array<string, mixed> $body Request body
     * @return \stdClass
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(array $body): \stdClass
    {
        $response = $this->client->post($this->requestUrl, $body);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to \stdClass
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
        
        return (object)$data;
    }
}
