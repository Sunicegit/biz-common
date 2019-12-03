<?php


namespace biz\common;


class Collection
{
    /**
     * 该函数从一个数组中取得若干元素。
     * 该函数测试（传入）数组的每个键值是否在（目标）数组中已定义；
     * 如果一个键值不存在，该键值所对应的值将被置为false，
     * 或者你可以通过传入的第3个参数来指定默认的值。
     *
     * @param array $keys 需要筛选的键名列表
     * @param array $src 要进行筛选的数组
     * @param mixed $default 如果原数组未定义某个键，则使用此默认值返回
     * @return array
     */
    public static function elements($keys, $src, $default = false)
    {
        $return = array();
        if (!is_array($keys)) {
            $keys = array($keys);
        }
        foreach ($keys as $key) {
            if (isset($src[$key])) {
                $return[$key] = $src[$key];
            } else {
                if ($default !== null) {
                    $return[$key] = $default;
                }
            }
        }
        return $return;
    }
}