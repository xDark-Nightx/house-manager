<?php

namespace System\Core;

class DefaultController{
    public function parseView(string $viewUrl, array $viewData){
        try{
            $viewContent = file_get_contents($viewUrl);

            if (empty($viewData)){
                return $viewContent;
            }

            foreach ($viewData as $key=>$dataItem){
                $viewContent = str_replace("@{{$key}}", $dataItem, $viewContent);
            }

            return $viewContent;
        }catch (\Exception $exception){
            return false;
        }
    }
}