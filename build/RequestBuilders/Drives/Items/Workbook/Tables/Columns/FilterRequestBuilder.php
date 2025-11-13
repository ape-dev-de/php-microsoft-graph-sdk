<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns;

use ApeDevDe\MicrosoftGraphSdk\Http\GraphClient;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\BaseRequestBuilder as RootBaseRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\Models\WorkbookFilter;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyBottomItemsFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyBottomPercentFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyCellColorFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyCustomFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyDynamicFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyFontColorFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyIconFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyTopItemsFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyTopPercentFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ApplyValuesFilterRequestBuilder;
use ApeDevDe\MicrosoftGraphSdk\RequestBuilders\Drives\Items\Workbook\Tables\Columns\Filter\ClearRequestBuilder;

/**
 * Request builder for /drives/{drive-id}/items/{driveItem-id}/workbook/tables/{workbookTable-id}/columns/{workbookTableColumn-id}/filter
 */
class FilterRequestBuilder extends RootBaseRequestBuilder
{
    /**
     * Get filter from drives
     *
     * @param array<int, string>|null $select Select properties to be returned
     * @param array<int, string>|null $expand Expand related entities
     * @return WorkbookFilter|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function get(?array $select = null, ?array $expand = null): WorkbookFilter|null
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
     * Deserialize response to WorkbookFilter|null
     */
    private function deserializeGet(string $body): WorkbookFilter|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookFilter($data);
    }
    /**
     * Update the navigation property filter in drives
     * @param WorkbookFilter $body Request body
     * @return WorkbookFilter|null
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function patch(WorkbookFilter $body): WorkbookFilter|null
    {
        $response = $this->client->patch($this->requestUrl, $body->getRaw());
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializePatch($responseBody);
    }

    /**
     * Deserialize response to WorkbookFilter|null
     */
    private function deserializePatch(string $body): WorkbookFilter|null    {
        if (empty($body)) {
            return null;
        }


        $data = json_decode($body, true);
        if ($data === null) {
            return null;
        }

        // Single object
        return new WorkbookFilter($data);
    }
    /**
     * Delete navigation property filter for drives
     *
     * @param string|null $ifMatch ETag
     * @return mixed
     * @throws \ApeDevDe\MicrosoftGraphSdk\Exceptions\GraphException
     */
    public function delete(?string $ifMatch = null): mixed
    {
        $queryParams = [];
        if ($ifMatch !== null && $ifMatch !== '') {
            $queryParams['If-Match'] = $ifMatch;
        }
        $response = $this->client->delete($this->requestUrl, $queryParams);
        $this->client->checkResponse($response);
        $responseBody = (string)$response->getBody();
        return $this->deserializeDelete($responseBody);
    }

    /**
     * Deserialize response to mixed
     */
    private function deserializeDelete(string $body): mixed    {
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
    /**
     * Navigate to apply
     *
     * @return ApplyRequestBuilder
     */
    public function apply(): ApplyRequestBuilder
    {
        return new ApplyRequestBuilder($this->client, $this->requestUrl . '/apply');
    }
    /**
     * Navigate to applyBottomItemsFilter
     *
     * @return ApplyBottomItemsFilterRequestBuilder
     */
    public function applyBottomItemsFilter(): ApplyBottomItemsFilterRequestBuilder
    {
        return new ApplyBottomItemsFilterRequestBuilder($this->client, $this->requestUrl . '/applyBottomItemsFilter');
    }
    /**
     * Navigate to applyBottomPercentFilter
     *
     * @return ApplyBottomPercentFilterRequestBuilder
     */
    public function applyBottomPercentFilter(): ApplyBottomPercentFilterRequestBuilder
    {
        return new ApplyBottomPercentFilterRequestBuilder($this->client, $this->requestUrl . '/applyBottomPercentFilter');
    }
    /**
     * Navigate to applyCellColorFilter
     *
     * @return ApplyCellColorFilterRequestBuilder
     */
    public function applyCellColorFilter(): ApplyCellColorFilterRequestBuilder
    {
        return new ApplyCellColorFilterRequestBuilder($this->client, $this->requestUrl . '/applyCellColorFilter');
    }
    /**
     * Navigate to applyCustomFilter
     *
     * @return ApplyCustomFilterRequestBuilder
     */
    public function applyCustomFilter(): ApplyCustomFilterRequestBuilder
    {
        return new ApplyCustomFilterRequestBuilder($this->client, $this->requestUrl . '/applyCustomFilter');
    }
    /**
     * Navigate to applyDynamicFilter
     *
     * @return ApplyDynamicFilterRequestBuilder
     */
    public function applyDynamicFilter(): ApplyDynamicFilterRequestBuilder
    {
        return new ApplyDynamicFilterRequestBuilder($this->client, $this->requestUrl . '/applyDynamicFilter');
    }
    /**
     * Navigate to applyFontColorFilter
     *
     * @return ApplyFontColorFilterRequestBuilder
     */
    public function applyFontColorFilter(): ApplyFontColorFilterRequestBuilder
    {
        return new ApplyFontColorFilterRequestBuilder($this->client, $this->requestUrl . '/applyFontColorFilter');
    }
    /**
     * Navigate to applyIconFilter
     *
     * @return ApplyIconFilterRequestBuilder
     */
    public function applyIconFilter(): ApplyIconFilterRequestBuilder
    {
        return new ApplyIconFilterRequestBuilder($this->client, $this->requestUrl . '/applyIconFilter');
    }
    /**
     * Navigate to applyTopItemsFilter
     *
     * @return ApplyTopItemsFilterRequestBuilder
     */
    public function applyTopItemsFilter(): ApplyTopItemsFilterRequestBuilder
    {
        return new ApplyTopItemsFilterRequestBuilder($this->client, $this->requestUrl . '/applyTopItemsFilter');
    }
    /**
     * Navigate to applyTopPercentFilter
     *
     * @return ApplyTopPercentFilterRequestBuilder
     */
    public function applyTopPercentFilter(): ApplyTopPercentFilterRequestBuilder
    {
        return new ApplyTopPercentFilterRequestBuilder($this->client, $this->requestUrl . '/applyTopPercentFilter');
    }
    /**
     * Navigate to applyValuesFilter
     *
     * @return ApplyValuesFilterRequestBuilder
     */
    public function applyValuesFilter(): ApplyValuesFilterRequestBuilder
    {
        return new ApplyValuesFilterRequestBuilder($this->client, $this->requestUrl . '/applyValuesFilter');
    }
    /**
     * Navigate to clear
     *
     * @return ClearRequestBuilder
     */
    public function clear(): ClearRequestBuilder
    {
        return new ClearRequestBuilder($this->client, $this->requestUrl . '/clear');
    }
}
