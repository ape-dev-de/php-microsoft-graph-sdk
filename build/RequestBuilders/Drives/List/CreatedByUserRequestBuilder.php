<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\List;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\User;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\List\CreatedByUser\MailboxSettingsRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\List\CreatedByUser\ServiceProvisioningErrorsRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/list/createdByUser
 */
class CreatedByUserRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get createdByUser from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return User|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): User|null
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
     * Deserialize response to User|null
     */
    private function deserializeGet(string $body): User|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new User($data);
    }
    /**
     * Navigate to mailboxSettings
     *
     * @return MailboxSettingsRequestBuilder
     */
    public function mailboxSettings(): MailboxSettingsRequestBuilder
    {
        return new MailboxSettingsRequestBuilder($this->client, $this->requestUrl . '/mailboxSettings');
    }
    /**
     * Navigate to serviceProvisioningErrors
     *
     * @return ServiceProvisioningErrorsRequestBuilder
     */
    public function serviceProvisioningErrors(): ServiceProvisioningErrorsRequestBuilder
    {
        return new ServiceProvisioningErrorsRequestBuilder($this->client, $this->requestUrl . '/serviceProvisioningErrors');
    }
}
