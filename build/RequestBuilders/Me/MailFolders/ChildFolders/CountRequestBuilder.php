<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Me\MailFolders\ChildFolders;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\ODataCountResponse;

/**
 * Request builder for /me/mailFolders/{mailFolder-id}/childFolders/$count
 */
class CountRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get the number of the resource
     *
     * @param string|null $includeHiddenFolders Include Hidden Folders
     * @param string|null $search Search items by search phrases
     * @param string|null $filter Filter items by property values
     * @return ODataCountResponse
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?string $includeHiddenFolders = null, ?string $search = null, ?string $filter = null): ODataCountResponse
    {
        $queryParams = [];
        if ($includeHiddenFolders !== null && $includeHiddenFolders !== '') {
            $queryParams['includeHiddenFolders'] = $includeHiddenFolders;
        }
        if ($search !== null && $search !== '') {
            $queryParams['$search'] = $search;
        }
        if ($filter !== null && $filter !== '') {
            $queryParams['$filter'] = $filter;
        }
        $response = $this->client->get($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeGet($responseBody);
    }

    /**
     * Deserialize response to ODataCountResponse
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
        return (object)$data;
    }
}
