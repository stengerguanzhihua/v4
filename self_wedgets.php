<?php
// 显示输入自动过滤的选择下拉框
function showFilteDropList()
{
}
// 显示输入自动过滤的输入框
function showFilteInputList(strSize,ArrayOptionValue)
{

	 <div class="col-sm-10">
                          <select data-placeholder="Select recipients..." multiple="da" tabindex="3" class="chosen-select form-control chosen-transparent" id="message-to">
                            <option value="http://tattek.com/minimal/ici@gmail.com">ici@gmail.com</option>
                            <option value="http://tattek.com/minimal/johny@gmail.com">johny@gmail.com</option>
                            <option value="http://tattek.com/minimal/arnie@gmail.com">arnie@gmail.com</option>
                            <option value="http://tattek.com/minimal/pete@gmail.com">pete@gmail.com</option>
                            <option value="http://tattek.com/minimal/gorge@gmail.com">gorge@gmail.com</option>
                          </select>
                        </div>

}

?>