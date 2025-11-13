<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\Synchronization\Jobs;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\StringKeyStringValuePair;

/**
 * Request builder for /applications/{application-id}/synchronization/jobs/{synchronizationJob-id}/provisionOnDemand
 */
class ProvisionOnDemandRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action provisionOnDemand
     * @param StringKeyStringValuePair $body Request body
     * @return StringKeyStringValuePair|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(StringKeyStringValuePair $body): StringKeyStringValuePair|null
    {
        $response = $this->client->post($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to StringKeyStringValuePair|null
     */
    private function deserializePost(string $body): StringKeyStringValuePair|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new StringKeyStringValuePair($data);
    }
}
