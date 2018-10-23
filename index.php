<!--
   index.html
   
   Copyright 2017 vlad <vlad@vlad-Presario-CQ58-Notebook-PC>
   
   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.
   
   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.
   
   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
   MA 02110-1301, USA.
   
   
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Vue-test</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>

	<div id="app">
		<button v-if="!isAnswering" @click="startTest()">Начать викторину</button>
		<div v-show="isAnswering && !isFinished">
			<div>
				<div>
					{{question.text}}
				</div>
				<div>
					<div v-for="answer in question.answers">
						<input :type="question.type" @click="saveAnswer(question.id,answer.id)">
						<span>{{answer.text}}</span>
					</div>
				</div>	
			</div>
			<button @click="next()">Next</button>
		</div>
		<div v-if="isFinished">
			Thank you!
		</div>
	</div>

	<script src="vue.js"></script>
	<script src="app.js"></script>
	
</body>

</html>
