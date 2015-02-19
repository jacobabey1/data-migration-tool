<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Migration\Resource;

/**
 * Adapter interface class
 */
interface AdapterInterface
{
    /**
     * Get Documents list
     *
     * @return array
     */
    public function getDocumentList();

    /**
     * Get Document Fields list
     * Returns array:
     * [
     *     'fieldName' => 'options'
     * ]
     *
     * @param string $documentName
     * @return array
     */
    public function getDocumentStructure($documentName);

    /**
     * Returns number of records of document
     *
     * @param string $documentName
     * @return int
     */
    public function getRecordsCount($documentName);

    /**
     * Load Page
     *
     * @param string $documentName
     * @param int $pageNumber
     * @param int $pageSize
     * @return array
     */
    public function loadPage($documentName, $pageNumber, $pageSize);

    /**
     * Insert records into document
     *
     * @param string $documentName
     * @param array $records
     * @return int
     */
    public function insertRecords($documentName, $records);

    /**
     * Delete all record from the document
     *
     * @param string $documentName
     * @return void
     */
    public function deleteAllRecords($documentName);
}
