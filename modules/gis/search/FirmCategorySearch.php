<?php

namespace app\modules\gis\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\gis\models\FirmCategory;

/**
 * FirmCategorySearch represents the model behind the search form of `app\modules\api\models\FirmCategory`.
 */
class FirmCategorySearch extends FirmCategory
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firm_id', 'category_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = FirmCategory::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'firm_id' => $this->firm_id,
            'category_id' => $this->category_id,
        ]);

        return $dataProvider;
    }
}
