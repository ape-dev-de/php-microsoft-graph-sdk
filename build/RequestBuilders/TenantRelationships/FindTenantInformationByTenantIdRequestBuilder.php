<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\TenantRelationships;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\TenantInformation;

/**
 * Request builder for /tenantRelationships/findTenantInformationByTenantId(tenantId='{tenantId}')
 */
class FindTenantInformationByTenantIdRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke function findTenantInformationByTenantId
     * @return TenantInformation|\stdClass|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(): TenantInformation|\stdClass|null
    {
        $response = $this->client->get($this->requestUrl, []);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to TenantInformation|\stdClass|null
     */
    private function deserializeGet(string $body): TenantInformation|\stdClass|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new TenantInformation($data);
    }
}
