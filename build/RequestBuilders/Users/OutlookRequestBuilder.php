<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\OutlookUser;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Outlook\MasterCategoriesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Outlook\SupportedLanguagesRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Users\Outlook\SupportedTimeZonesRequestBuilder;

/**
 * Request builder for /users/{user-id}/outlook
 */
class OutlookRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get outlook from users
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return OutlookUser|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): OutlookUser|null
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
     * Deserialize response to OutlookUser|null
     */
    private function deserializeGet(string $body): OutlookUser|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new OutlookUser($data);
    }
    /**
     * Navigate to masterCategories
     *
     * @return MasterCategoriesRequestBuilder
     */
    public function masterCategories(): MasterCategoriesRequestBuilder
    {
        return new MasterCategoriesRequestBuilder($this->client, $this->requestUrl . '/masterCategories');
    }
    /**
     * Navigate to supportedLanguages()
     *
     * @return SupportedLanguagesRequestBuilder
     */
    public function supportedLanguages(): SupportedLanguagesRequestBuilder
    {
        return new SupportedLanguagesRequestBuilder($this->client, $this->requestUrl . '/supportedLanguages()');
    }
    /**
     * Navigate to supportedTimeZones()
     *
     * @return SupportedTimeZonesRequestBuilder
     */
    public function supportedTimeZones(): SupportedTimeZonesRequestBuilder
    {
        return new SupportedTimeZonesRequestBuilder($this->client, $this->requestUrl . '/supportedTimeZones()');
    }
}
