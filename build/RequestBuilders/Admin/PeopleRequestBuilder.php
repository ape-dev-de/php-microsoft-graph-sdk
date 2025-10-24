<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\PeopleAdminSettings;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\People\ItemInsightsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\People\ProfileCardPropertiesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Admin\People\PronounsRequestBuilder;

/**
 * Request builder for /admin/people
 */
class PeopleRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get peopleAdminSettings
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return PeopleAdminSettings
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): PeopleAdminSettings
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
     * Deserialize response to PeopleAdminSettings
     */
    private function deserializeGet(string $body): mixed
    {
        if (empty($body)) {
            return null;
        }
        
        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }
        
        // Single object
        return new PeopleAdminSettings($data);
    }
    /**
     * Navigate to itemInsights
     *
     * @return ItemInsightsRequestBuilder
     */
    public function itemInsights(): ItemInsightsRequestBuilder
    {
        return new ItemInsightsRequestBuilder($this->client, $this->requestUrl . '/itemInsights');
    }
    /**
     * Navigate to profileCardProperties
     *
     * @return ProfileCardPropertiesRequestBuilder
     */
    public function profileCardProperties(): ProfileCardPropertiesRequestBuilder
    {
        return new ProfileCardPropertiesRequestBuilder($this->client, $this->requestUrl . '/profileCardProperties');
    }
    /**
     * Navigate to pronouns
     *
     * @return PronounsRequestBuilder
     */
    public function pronouns(): PronounsRequestBuilder
    {
        return new PronounsRequestBuilder($this->client, $this->requestUrl . '/pronouns');
    }
}
