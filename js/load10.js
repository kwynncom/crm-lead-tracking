class load10 {
	constructor(arr) {
		this.l10(arr);
	}
	
	l10(arr) {
		
		const tab = byid('tbody10');
		
		for (let i=0; i < arr.length; i++) {
			const r  = arr[i];
			const hr = cree('tr');
			for (let j=0; j < r.length; j++) {
				const e = cree('td');
				const it = r[j];
				if (j === 0) {
					const a = cree('a');
					a.href = it;
					a.innerHTML = it;
					e.append(a);
				} 
				else {
					e.innerHTML = it;
				}
	
				hr.append(e);
			}
			
			tab.append(hr);
		}
	}

}