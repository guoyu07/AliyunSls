<?php

/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

require_once realpath(dirname(__FILE__) . '/Request.php');

/**
 * The request used to send data to sls server.
 *
 * @author sls_dev
 */
class Aliyun_Sls_Models_PutLogsRequest extends Aliyun_Sls_Models_Request {

    /**
     * @var string logstore name
     */
    private $logstore;

    /**
     * @var string topic name
     */
    private $topic;

    /**
     * @var string source of the logs
     */
    private $source;

    /**
     * @var array LogItem array, log data
     */
    private $logitems;
    
    /**
     * Aliyun_Sls_Models_PutLogsRequest cnstructor
     *
     * @param string $project
     *            project name
     * @param string $logstore
     *            logstore name
     * @param string $topic
     *            topic name
     * @param string $source
     *            source of the log
     * @param array $logitems
     *            LogItem array,log data
     */
    public function __construct($project = null, $logstore = null, $topic = null, $source = null, $logitems = null) {
        parent::__construct ( $project );
        $this->logstore = $logstore;
        $this->topic = $topic;
        $this->source = $source;
        $this->logitems = $logitems;
    }
    
    /**
     * Get logstroe name
     *
     * @return string logstore name
     */
    public function getLogstore() {
        return $this->logstore;
    }
    
    /**
     * Set logstore name
     *
     * @param string $logstore
     *            logstore name
     */
    public function setLogstore($logstore) {
        $this->logstore = $logstore;
    }
    
    /**
     * Get topic name
     *
     * @return string topic name
     */
    public function getTopic() {
        return $this->topic;
    }
    
    /**
     * Set topic name
     *
     * @param string $topic
     *            topic name
     */
    public function setTopic($topic) {
        $this->topic = $topic;
    }
    
    /**
     * Get all the log data
     * 
     * @return array LogItem array, log data
     */
    public function getLogItems() {
        return $this->logitems;
    }
    
    /**
     * Set the log data
     * 
     * @param array $logitems
     *            LogItem array, log data
     */
    public function setLogItems($logitems) {
        $this->logitems = $logitems;
    }
    
    /**
     * Get log source
     *
     * @return string log source
     */
    public function getSource() {
        return $this->source;
    }
    
    /**
     * set log source
     *
     * @param string $source
     *            log source
     */
    public function setSource($source) {
        $this->source = $source;
    }
}