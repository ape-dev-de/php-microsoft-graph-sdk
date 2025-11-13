<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\IdentityGovernance\EntitlementManagement\AccessPackages\AssignmentPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\AccessPackageCatalog;

/**
 * Request builder for /identityGovernance/entitlementManagement/accessPackages/{accessPackage-id}/assignmentPolicies/{accessPackageAssignmentPolicy-id}/catalog
 */
class CatalogRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get catalog from identityGovernance
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return AccessPackageCatalog|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): AccessPackageCatalog|null
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
     * Deserialize response to AccessPackageCatalog|null
     */
    private function deserializeGet(string $body): AccessPackageCatalog|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new AccessPackageCatalog($data);
    }
}
