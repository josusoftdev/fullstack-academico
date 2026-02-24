'use client';
import { Button } from './components/ui/button'
import { Card, CardHeader, CardContent } from './components/ui/card'

import { Trash2 } from 'lucide-react'

export default function App(){
  
return(
    <Card className=''>

        <CardHeader
            title='Novo Produto'
            description='Detalhes do Produto'/>

        <CardContent>
            <p>Deseja excluir este item?</p>
            <Button variant='ghost'>
                Cancelar
            </Button>
            <Button variant="danger" icon={<Trash2 size={18} />} onClick={() => alert("deletado!")}>
            Confirmar Exclusão
            </Button>
        </CardContent>
     </Card>
)

}