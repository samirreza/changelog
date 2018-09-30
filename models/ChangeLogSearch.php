<?php

namespace modules\changelog\models;

use yii\data\ActiveDataProvider;

class ChangeLogSearch extends ChangeLog
{
    public function rules()
    {
        return [
            ['version', 'string']
        ];
    }

    public function search($params)
    {
        $query = ChangeLog::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'attributes' => [
                    'id',
                    'date'
                ],
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ]
        ]);

        $this->load($params);
        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'version', $this->version]);

        return $dataProvider;
    }
}
