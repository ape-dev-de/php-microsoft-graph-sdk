<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceManagement\DeviceConfigurations;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;

/**
 * Request builder for /deviceManagement/deviceConfigurations/{deviceConfiguration-id}/getOmaSettingPlainTextValue(secretReferenceValueId='{secretReferenceValueId}')
 */
class GetOmaSettingPlainTextValueRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function getOmaSettingPlainTextValue
     * @return \stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): \stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to \stdClass|null
     */
    private function deserializeGet(string $body): \stdClass|null    {
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
