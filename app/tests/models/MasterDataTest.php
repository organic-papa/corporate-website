<?php

class MasterDataTest extends TestCase {

	public function testContactInquiryByKey()
	{
		$this->assertEquals('お野菜について', MasterData::contactInquiryByKey(1));
		$this->assertEquals('業務提携について', MasterData::contactInquiryByKey(3));
		$this->assertEquals('イベント・活動・取材について', MasterData::contactInquiryByKey(5));
		$this->assertEquals('', MasterData::contactInquiryByKey(7));
	}

	public function testPrefectureByName()
	{
		$this->assertEquals('01', MasterData::prefectureByName('北海道'));
		$this->assertEquals('11', MasterData::prefectureByName('埼玉県'));
		$this->assertEquals('21', MasterData::prefectureByName('岐阜県'));
		$this->assertEquals('31', MasterData::prefectureByName('鳥取県'));
		$this->assertEquals('41', MasterData::prefectureByName('佐賀県'));
		$this->assertEquals('', MasterData::prefectureByName('パリ'));
	}

	public function testPrefectureByCode()
	{
		$this->assertEquals('北海道', MasterData::prefectureByCode('01'));
		$this->assertEquals('埼玉県', MasterData::prefectureByCode('11'));
		$this->assertEquals('岐阜県', MasterData::prefectureByCode('21'));
		$this->assertEquals('鳥取県', MasterData::prefectureByCode('31'));
		$this->assertEquals('佐賀県', MasterData::prefectureByCode('41'));
		$this->assertEquals('', MasterData::prefectureByCode('51'));
	}

	public function testRegularSetByCode()
	{
		$this->assertEquals('PAPAのミニセット（3,000円）', MasterData::regularSetByCode(1));
		$this->assertEquals('PAPAセット（4,000円）', MasterData::regularSetByCode(2));
		$this->assertEquals('PAPAのボリュームセット（5,000円）', MasterData::regularSetByCode(3));
		$this->assertEquals('', MasterData::regularSetByCode(4));
	}
}
