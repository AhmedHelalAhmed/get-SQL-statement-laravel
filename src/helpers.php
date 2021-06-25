<?php


if (!function_exists('getMYSQLStatement')) {

    /**
     * To get Full MYSQL statement for debug purposes
     * 
     * @param $query
     */
    function getMYSQLStatement($query)
    {
        $bindings = collect($query->getBindings())->map(function ($param) {
            if (is_numeric($param)) {
                return $param;
            } else {
                return "'${param}'";
            }
        });

        return Illuminate\Support\Str::replaceArray('?', $bindings->toArray(), $query->toSql());
    }
}
