@extends('layouts.app')


@section('content')
<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                На кого распространяются Правила по охране труда при эксплуатации электроустановок?
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">На работодателей - юридических и физических лиц независимо от их организационно-правовых форм и работников из числа электротехнического, электротехнологического и неэлектротехнического персонала</div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Каким образом оформляются результаты проверки знаний по охране труда Потребителей?
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Фиксируются в "Журнале учета проверки знаний правил работы в электроустановках" рекомендуемого образца</div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Право проведения каких работ должно быть зафиксировано в удостоверении о проверке знаний правил работы в электроустановках в графе «Свидетельство на право проведения специальных работ»?
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Работы, выполняемые со снятием рабочего напряжения с электроустановки или ее части с прикосновением к токоведущим частям, находящимся под наведенным напряжением более 25 В на рабочем месте или на расстоянии от этих токоведущих частей менее допустимого </div>
        </div>
    </div>
</div>
@endsection
