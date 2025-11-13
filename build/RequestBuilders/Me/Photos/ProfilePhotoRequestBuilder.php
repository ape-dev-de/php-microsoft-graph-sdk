<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Photos;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ProfilePhoto;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\Photos\ValueRequestBuilder;

/**
 * Request builder for /me/photos/{profilePhoto-id}
 */
class ProfilePhotoRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get photos from me
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return ProfilePhoto|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): ProfilePhoto|null
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
     * Deserialize response to ProfilePhoto|null
     */
    private function deserializeGet(string $body): ProfilePhoto|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new ProfilePhoto($data);
    }
    /**
     * Navigate to $value
     *
     * @return ValueRequestBuilder
     */
    public function value(): ValueRequestBuilder
    {
        return new ValueRequestBuilder($this->client, $this->requestUrl . '/$value');
    }
}
