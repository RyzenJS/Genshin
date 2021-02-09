@extends('layouts.app')

@section('content')

<main class="bg-gradient-to-r from-black to-gray-900">

  <div class="flex flex-row center justify-center">
    <div class="grid grid-cols-6 md:grid-rows-6 gap-5 mt-20">

      <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
            <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Anemo.png" class="animate-pulse" md:bg-left-top width="30" height="30" class="character-type" alt="Anemo">
                <img src="https://rerollcdn.com/GENSHIN/Characters/Xiao.png" alt="Xiao"> <!--class="transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110"-->
                <h4 class="text-center">Xiao</h4>
            </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
            <a href="{{ url('/characters/amber') }}">
                <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Pyro">
                <img src="https://rerollcdn.com/GENSHIN/Characters/Amber.png" alt="Amber">
                <h4 class="text-center">Amber</h4>
            </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
            <a href="#">
                <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Hydro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Hydro">
                <img src="https://rerollcdn.com/GENSHIN/Characters/Barbara.png" alt="Barbara">
                <h4 class="text-center">Barbara</h4>
            </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
            <a href="#">
                <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Electro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Electro">
                <img src="https://rerollcdn.com/GENSHIN/Characters/Beidou.png" alt="Beidou">
                <h4 class="text-center">Beidou</h4>
            </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
            <a href="#">
                <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Pyro">
                <img src="https://rerollcdn.com/GENSHIN/Characters/Bennett.png" alt="Bennet">
                <h4 class="text-center">Bennett</h4>
            </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
            <a href="#">
                <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Cryo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Cryo">
                <img src="https://rerollcdn.com/GENSHIN/Characters/Chongyun.png" alt="Chongyun">
                <h4 class="text-center">Chongyun</h4>
            </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Pyro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Diluc.png" alt="Diluc">
              <h4 class="text-center">Diluc</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Cryo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Cryo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Diona.png" width="106" height="106" alt="Diona">
              <h4 class="text-center">Diona</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Electro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Electro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Fischl.png" alt="Fischl">
              <h4 class="text-center">Fischl</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Anemo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Anemo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Jean.png" alt="Jean">
              <h4 class="text-center">Jean</h4>
          </a>
        </div>
        
        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Cryo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Cryo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Kaeya.png" alt="Kaeya">
              <h4 class="text-center">Kaeya</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Electro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Electro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Keqing.png" alt="Keqing">
              <h4 class="text-center">Keqing</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Pyro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Klee.png" alt="Klee">
              <h4 class="text-center">Klee</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Electro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Electro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Lisa.png" alt="Lisa">
              <h4 class="text-center">Lisa</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Hydro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Hydro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Mona.png" alt="Mona">
              <h4 class="text-center">Mona</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Geo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Geo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Ningguang.png" alt="Ningguang">
              <h4 class="text-center">Ningguang</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Geo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Geo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Noelle.png" alt="Noelle">
              <h4 class="text-center">Noelle</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Cryo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Cryo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Qiqi.png" alt="Qiqi">
              <h4 class="text-center">Qiqi</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Electro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Electro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Razor.png" alt="Razor">
              <h4 class="text-center">Razor</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Anemo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Anemo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Sucrose.png" alt="Sucrose">
              <h4 class="text-center">Sucrose</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Hydro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Hydro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Tartaglia.png" alt="Tartaglia">
              <h4 class="text-center">Tartaglia</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Anemo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Anemo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Traveler (Anemo).png" alt="Traveler Anemo">
              <h4 class="text-center">Traveler Anemo</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Geo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Geo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Traveler (Geo).png" alt="Traveler Geo">
              <h4 class="text-center">Traveler Geo</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Anemo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Anemo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Venti.png" alt="Venti">
              <h4 class="text-center">Venti</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Pyro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Xiangling.png" alt="Xiangling">
              <h4 class="text-center">Xiangling</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Hydro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Hydro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Xingqiu.png" alt="Xingqiu">
              <h4 class="text-center">Xingqiu</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Pyro.png" md:bg-left-top width="30" height="30" class="character-type" alt="Pyro">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Xinyan.png" width="106" height="106" alt="Xinyan">
              <h4 class="text-center">Xinyan</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Geo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Geo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Zhongli.png" width="106" height="106" alt="Zhongli">
              <h4 class="text-center">Zhongli</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Geo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Geo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Albedo.png" alt="Albedo">
              <h4 class="text-center">Albedo</h4>
          </a>
        </div>

        <div class="bg-gray-300 p-2 rounded transition duration-500 ease-in-out hover:bg-gray-600 transform hover:-translate-y-1 hover:scale-110">
          <a href="#">
              <img src="https://rerollcdn.com/GENSHIN/Elements/Element_Cryo.png" md:bg-left-top width="30" height="30" class="character-type" alt="Cryo">
              <img src="https://rerollcdn.com/GENSHIN/Characters/Ganyu.png" alt="Ganyu">
              <h4 class="text-center">Ganyu</h4>
          </a>
        </div>

      </div>
    </div>
  </main>
  @endsection