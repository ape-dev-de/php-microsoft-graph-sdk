<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\Catalogs\Resources\Roles\Resource\Scopes\Resource;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageResourceEnvironment;

/**
 * Request builder for /identityGovernance/entitlementManagement/catalogs/{accessPackageCatalog-id}/resources/{accessPackageResource-id}/roles/{accessPackageResourceRole-id}/resource/scopes/{accessPackageResourceScope-id}/resource/environment
 */
class EnvironmentRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get environment from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackageResourceEnvironment|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackageResourceEnvironment|null
    {
        $queryParams = [];
        if ($select !== null && $select !== []) {
            $queryParams['$select'] = implode(',', $select);
        }
        if ($expand !== null && $expand !== []) {
            $queryParams['$expand'] = implode(',', $expand);
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to AccessPackageResourceEnvironment|null
     */
    private function deserializeGet(string $body): AccessPackageResourceEnvironment|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessPackageResourceEnvironment($data);
    }
}
