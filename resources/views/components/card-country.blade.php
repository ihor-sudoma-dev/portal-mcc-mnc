<div class="flex flex-col w-48 gap-2 border border-lime-300 text-lime-300 cursor-pointer">
	<div class="flex p-2 bg-lime-300 text-black">
		{{ $headTitle }}
	</div>
	<div class="flex self-center"><img src="{{asset($icon)}}" alt="{{ $alt ?? '' }}" width="64" height="48"></div>
	<div class="flex h-1 m-2 bg-lime-300"></div>
	<div class="flex gap-2 p-2 text-amber-200">
		<div class="flex ">ISO2</div>
		<div class="flex ">{{ $iso2 }}</div>
	</div>
	<div class="flex gap-2 p-2 text-amber-200">
		<div class="flex ">MCC</div>
		<div class="flex ">{{ $mcc }}</div>
	</div>
</div>