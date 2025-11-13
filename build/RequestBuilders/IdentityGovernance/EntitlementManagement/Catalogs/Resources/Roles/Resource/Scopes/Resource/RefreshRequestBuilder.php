<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\Catalogs\Resources\Roles\Resource\Scopes\Resource;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;

/**
 * Request builder for /identityGovernance/entitlementManagement/catalogs/{accessPackageCatalog-id}/resources/{accessPackageResource-id}/roles/{accessPackageResourceRole-id}/resource/scopes/{accessPackageResourceScope-id}/resource/refresh
 */
class RefreshRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Invoke action refresh
     * @param array<string, mixed> $body Request body
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function post(array $body): mixed
    {
        $response = $this->client->post($this->requestUrl, $body);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePost($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializePost(string $body): mixed    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return $data;
    }
}
