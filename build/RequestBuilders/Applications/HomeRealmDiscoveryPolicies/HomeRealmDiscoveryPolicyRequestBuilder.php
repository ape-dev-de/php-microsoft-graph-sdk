<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Applications\HomeRealmDiscoveryPolicies;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\HomeRealmDiscoveryPolicy;

/**
 * Request builder for /applications/{application-id}/homeRealmDiscoveryPolicies/{homeRealmDiscoveryPolicy-id}
 */
class HomeRealmDiscoveryPolicyRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get homeRealmDiscoveryPolicies from applications
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return HomeRealmDiscoveryPolicy|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): HomeRealmDiscoveryPolicy|null
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
     * Deserialize response to HomeRealmDiscoveryPolicy|null
     */
    private function deserializeGet(string $body): HomeRealmDiscoveryPolicy|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new HomeRealmDiscoveryPolicy($data);
    }
}
