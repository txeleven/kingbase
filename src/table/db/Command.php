<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace huaweichenai\kingbase\table\db;

use huaweichenai\kingbase\DbDialectType;
use huaweichenai\kingbase\DialectSqlHandleGate;
use huaweichenai\kingbase\exceptions\DbxException;
use PHPSQLParser\exceptions\UnsupportedFeatureException;

/**
 * Command represents an Oracle SQL statement to be executed against a database.
 *
 * {@inheritdoc}
 *
 * @since 2.0.33
 */
class Command extends \yii\db\Command
{
    /**
     * @var DialectSqlHandleGate
     */
    protected $handler;

    protected $isTranslate = true;

    public function init()
    {
        parent::init();
        $this->handler = new DialectSqlHandleGate(DbDialectType::DB_TYPE_KDB);
    }

    /**
     * @throws DbxException
     * @throws UnsupportedFeatureException
     */
    public function getSql()
    {
        return $this->translate(parent::getSql());
    }

    /**
     * @throws DbxException
     * @throws UnsupportedFeatureException
     */
    public function getRawSql()
    {
        return $this->translate(parent::getRawSql());
    }

    /**
     * 转换操作
     * @param $sql
     * @return string
     * @throws DbxException
     * @throws UnsupportedFeatureException
     */
    private function translate($sql)
    {
        if (!$this->isTranslate) {
            return $sql;
        }

        return $sql;
    }

    /**
     * 取消翻译
     * @return $this
     */
    public function disableTranslate()
    {
        $this->isTranslate = false;
        return $this;
    }
}
