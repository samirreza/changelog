<?php

namespace modules\changelog\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class ChangeLogSearch extends ChangeLog
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['version', 'description'], 'string'],
        ];
    }
    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = ChangeLog::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'createdAt' => SORT_DESC,
                ],
            ],
        ]);

        $this->load($params);


        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'version', $this->version])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}