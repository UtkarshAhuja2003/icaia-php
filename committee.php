<div>
  <div class="w-full">
    <div class=' bg-white md:px-[10%]'>
      <div class='pt-16'>
        <h1 class='text-[#c00000] text-center text-3xl font-[600]'>COMMITTEES</h1>
        <div class='w-48 h-[2px] mx-auto mt-2 bg-[#100464] rounded-xl'></div>
      </div>

      <div class="grid grid-cols-3 mt-8">
        <button class="tab text-lg rounded-lg text-white w-[80%] ml-[10%] py-1 bg-[#100464]" onclick="changeTab(1)">Organising Committee</button>
        <button class="tab text-lg rounded-lg text-black w-[80%] ml-[10%] py-1 bg-white" onclick="changeTab(2)">Advisory Committee</button>
        <button class="tab text-lg rounded-lg text-black w-[80%] ml-[10%] py-1 bg-white" onclick="changeTab(3)">Technical Committee</button>
      </div>

      <div id="content1" class="content mt-8">
      <?php include("./organising.php")?>
      </div>

    
      <div id="content2" class="content mt-8" style="display: none;">
      <?php include("./advisory.php")?>
      </div>
      <div id="content3" class="content mt-8" style="display: none;">
      <?php include("./technical.php")?>
        </div>
    </div>
  </div>
</div>



