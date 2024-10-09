<script>
    function changeSelect(){
        setTimeout(function(){
            $(".select2").select2({
                placeholder: "Search"
            });
        }, 100);
    }
    function changeSubject(val){
        var subject = val;
        var temp1 = subject.replace("conditions[", "");
        var index = temp1.replace("][subject]", "");
        var subject_value = document.getElementsByName(val)[0].value;

        if(subject_value == 'number_of_user_quest'){
            var operator = "conditions["+index+"][operator]";
            var operator_value = document.getElementsByName(operator)[0];
            for(i = operator_value.options.length - 1 ; i >= 0 ; i--) operator_value.remove(i);
            operator_value.options[operator_value.options.length] = new Option('=', '=');
            operator_value.options[operator_value.options.length] = new Option('>', '>');
            operator_value.options[operator_value.options.length] = new Option('>=', '>=');
            operator_value.options[operator_value.options.length] = new Option('<', '<');
            operator_value.options[operator_value.options.length] = new Option('<=', '<=');

            var parameter = "conditions["+index+"][parameter]";
            document.getElementsByName(parameter)[0].type = 'text';
        }else if(subject_value == 'rule_quest'){
            var operator = "conditions["+index+"][operator]";
            var operator_value = document.getElementsByName(operator)[0];
            for(i = operator_value.options.length - 1 ; i >= 0 ; i--) operator_value.remove(i);
            operator_value.options[operator_value.options.length] = new Option('Product', 'product');
            operator_value.options[operator_value.options.length] = new Option('Outlet', 'outlet');
            operator_value.options[operator_value.options.length] = new Option('Province', 'province');
            operator_value.options[operator_value.options.length] = new Option('Transaction Nominal', 'trx_nominal');
            operator_value.options[operator_value.options.length] = new Option('Total Transaction', 'trx_total');

            var parameter = "conditions["+index+"][parameter]";
            document.getElementsByName(parameter)[0].type = 'hidden';
        }else if(subject_value == 'benefit_quest'){
            var operator = "conditions["+index+"][operator]";
            var operator_value = document.getElementsByName(operator)[0];
            for(i = operator_value.options.length - 1 ; i >= 0 ; i--) operator_value.remove(i);
            operator_value.options[operator_value.options.length] = new Option('Point', 'point');
            operator_value.options[operator_value.options.length] = new Option('Voucher', 'voucher');

            var parameter = "conditions["+index+"][parameter]";
            document.getElementsByName(parameter)[0].type = 'hidden';
        }else{
            var operator = "conditions["+index+"][operator]";
            var operator_value = document.getElementsByName(operator)[0];
            for(i = operator_value.options.length - 1 ; i >= 0 ; i--) operator_value.remove(i);
            operator_value.options[operator_value.options.length] = new Option('=', '=');
            operator_value.options[operator_value.options.length] = new Option('like', 'like');

            var parameter = "conditions["+index+"][parameter]";
            document.getElementsByName(parameter)[0].type = 'text';
        }
    }

</script>

<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption font-blue ">
            <i class="icon-settings font-blue "></i>
            <span class="caption-subject bold uppercase">Filter</span>
        </div>
    </div>
    <div class="portlet-body form">

        <div class="form-body">
            <div class="form-group">
                <label class="col-md-2 control-label">Date Start :</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="date" class="form-control" name="date_start" value="{{ $date_start }}">
                        <span class="input-group-btn">
                            <button class="btn default" type="button">
                                <i class="fa fa-calendar"></i>
                            </button>
                        </span>
                    </div>
                </div>

                <label class="col-md-2 control-label">Date End :</label>
                <div class="col-md-4">
                    <div class="input-group">
                        <input type="date" class="form-control" name="date_end" value="{{ $date_end }}">
                        <span class="input-group-btn">
                            <button class="btn default" type="button">
                                <i class="fa fa-calendar"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div><hr>

        <div class="form-body">
            <div class="form-group mt-repeater">
                <div data-repeater-list="conditions">
                    @if (!empty($conditions))
                        @foreach ($conditions as $key => $con)
                            @if(isset($con['subject']))
                                <div data-repeater-item class="mt-repeater-item mt-overflow">
                                    <div class="mt-repeater-cell">
                                        <div class="col-md-12">
                                            <div class="col-md-1">
                                                <a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="subject" class="form-control input-sm select2" placeholder="Search Subject" onChange="changeSubject(this.name)" style="width:100%">
                                                    <option value="quest_name" @if ($con['subject'] == 'quest_name') selected @endif>Quest Name</option>
                                                    <option value="rule_quest" @if ($con['subject'] == 'rule_quest') selected @endif>Rule Quest</option>
                                                    <option value="number_of_user_quest" @if ($con['subject'] == 'number_of_user_quest') selected @endif>Number of User on Quest</option>
                                                    <option value="benefit_quest" @if ($con['subject'] == 'benefit_quest') selected @endif>Benefit Quest</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="operator" class="form-control input-sm select2" placeholder="Search Operator" id="test" style="width:100%">
                                                    @if($con['subject'] == 'number_of_user_quest')
                                                        <option value="=" @if ($con['operator']  == '=') selected @endif>=</option>
                                                        <option value=">" @if ($con['operator']  == '>') selected @endif>></option>
                                                        <option value=">=" @if ($con['operator']  == '>=') selected @endif>>=</option>
                                                        <option value="<" @if ($con['operator']  == '<') selected @endif><</option>
                                                        <option value="<=" @if ($con['operator']  == '<=') selected @endif><=</option>
                                                    @elseif($con['subject'] == 'rule_quest')
                                                        <option value="product" @if ($con['operator']  == 'product') selected @endif>Product</option>
                                                        <option value="outlet" @if ($con['operator']  == 'outlet') selected @endif>Outlet</option>
                                                        <option value="province" @if ($con['operator']  == 'province') selected @endif>Province</option>
                                                        <option value="trx_nominal" @if ($con['operator']  == 'trx_nominal') selected @endif>Transaction Nominal</option>
                                                        <option value="trx_total" @if ($con['operator']  == 'trx_total') selected @endif>Total Transaction</option>
                                                    @elseif($con['subject'] == 'benefit_quest')
                                                        <option value="point" @if ($con['operator']  == 'point') selected @endif>Point</option>
                                                        <option value="voucher" @if ($con['operator']  == 'voucher') selected @endif>Voucher</option>
                                                    @else
                                                        <option value="=" @if ($con['operator'] == '=') selected @endif>=</option>
                                                        <option value="like" @if ($con['operator']  == 'like') selected @endif>Like</option>
                                                    @endif
                                                </select>
                                            </div>

                                            @if ($con['subject'] == 'rule_quest' || $con['subject'] == 'benefit_quest')
                                                <div class="col-md-3">
                                                    <input type="hidden" placeholder="Keyword" class="form-control" name="parameter" required @if (isset($con['parameter'])) value="{{ $con['parameter'] }}" @endif/>
                                                </div>
                                            @else
                                                <div class="col-md-3">
                                                    <input type="text" placeholder="Keyword" class="form-control" name="parameter" required @if (isset($con['parameter'])) value="{{ $con['parameter'] }}" @endif/>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div data-repeater-item class="mt-repeater-item mt-overflow">
                                    <div class="mt-repeater-cell">
                                        <div class="col-md-12">
                                            <div class="col-md-1">
                                                <a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline">
                                                    <i class="fa fa-close"></i>
                                                </a>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="subject" class="form-control input-sm select2" placeholder="Search Subject" onChange="changeSubject(this.name)" style="width:100%">
                                                    <option value="quest_name">Quest Name</option>
                                                    <option value="rule_quest">Rule Quest</option>
                                                    <option value="number_of_user_quest">Number of User on Quest</option>
                                                    <option value="benefit_quest">Benefit Quest</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="operator" class="form-control input-sm select2" placeholder="Search Operator" id="test" style="width:100%">
                                                    <option value="=" selected>=</option>
                                                    <option value="like">Like</option>
                                                </select>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" placeholder="Keyword" class="form-control" name="parameter" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div data-repeater-item class="mt-repeater-item mt-overflow">
                            <div class="mt-repeater-cell">
                                <div class="col-md-12">
                                    <div class="col-md-1">
                                        <a href="javascript:;" data-repeater-delete class="btn btn-danger mt-repeater-delete mt-repeater-del-right mt-repeater-btn-inline">
                                            <i class="fa fa-close"></i>
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="subject" class="form-control input-sm select2" placeholder="Search Subject" onChange="changeSubject(this.name)" style="width:100%">
                                            <option value="quest_name">Quest Name</option>
                                            <option value="rule_quest">Rule Quest</option>
                                            <option value="number_of_user_quest">Number of User on Quest</option>
                                            <option value="benefit_quest">Benefit Quest</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="operator" class="form-control input-sm select2" placeholder="Search Operator" id="test" style="width:100%">
                                            <option value="=" selected>=</option>
                                            <option value="like">Like</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" placeholder="Keyword" class="form-control" name="parameter" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="form-action col-md-12">
                    <div class="col-md-12">
                        <a href="javascript:;" data-repeater-create class="btn btn-success mt-repeater-add" onClick="changeSelect();">
                            <i class="fa fa-plus"></i> Add New Condition</a>
                    </div>
                </div>

                <div class="form-action col-md-12" style="margin-top:15px">
                    <div class="col-md-5">
                        <select name="rule" class="form-control input-sm " placeholder="Search Rule" required>
                            <option value="and" @if (isset($rule) && $rule == 'and') selected @endif>Valid when all conditions are met</option>
                            <option value="or" @if (isset($rule) && $rule == 'or') selected @endif>Valid when minimum one condition is met</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        {{ csrf_field() }}
                        <button type="submit" class="btn yellow"><i class="fa fa-search"></i> Search</button>
                        <a class="btn green" href="{{url()->current()}}">Reset</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>