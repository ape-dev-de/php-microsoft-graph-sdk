<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\DeviceAndAppManagementData;

/**
 * Request builder for /me/exportDeviceAndAppManagementData()
 */
class ExportDeviceAndAppManagementDataRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function exportDeviceAndAppManagementData
     * @return DeviceAndAppManagementData|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): DeviceAndAppManagementData|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to DeviceAndAppManagementData|\stdClass|null
     */
    private function deserializeGet(string $body): DeviceAndAppManagementData|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new DeviceAndAppManagementData($data);
    }
}
