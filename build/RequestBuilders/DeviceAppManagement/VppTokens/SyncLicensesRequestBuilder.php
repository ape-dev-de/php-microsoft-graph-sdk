<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\DeviceAppManagement\VppTokens;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\VppToken;

/**
 * Request builder for /deviceAppManagement/vppTokens/{vppToken-id}/syncLicenses
 */
class SyncLicensesRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action syncLicenses
     * @param VppToken|\stdClass $body Request body
     * @return VppToken|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(VppToken|\stdClass $body): VppToken|\stdClass|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to VppToken|\stdClass|null
     */
    private function deserializePost(string $body): VppToken|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new VppToken($data);
    }
}
